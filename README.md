# SOCOMEC_NV6

LibreNMS integration for the **Socomec Net Vision 6** UPS Management card. 
This implementation is based on the NET VISION 8 card, with added support for **EMD sensors** (Temperature and Humidity).

## 🛠 Installation & File Mapping

To integrate this into your LibreNMS instance, move the files to the following directories:

| File | Destination Path |
| :--- | :--- |
| `SocomecNv6.php` | `LibreNMS/OS/` |
| `os_detection_socomec-nv6.yaml` | `resources/definitions/os_detection/socomec-nv6.yaml` |
| `os_discovery_socomec-nv6.yaml` | `resources/definitions/os_discovery/socomec-nv6.yaml` |
| `SOCOMECUPS6-MIB` | `mibs/socomec/` |

> [!IMPORTANT]
> Ensure you rename the `.yaml` files during the copy process to `socomec-nv6.yaml` as shown above.

## 📝 Notes
* **MIB Modifications:** The MIB file has been slightly edited to align with the NV8 branch and to correct minor typographical errors.
* **Compatibility:** This integration does not conflict with existing Socomec OS definitions or files.
