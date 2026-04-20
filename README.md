# SOCOMEC_NV6
LibreNMS integration for Socomec Net Vision 6 UPS Management card
SocomecNv6.php goes to LibreNMS/OS/ folder
os_detection_socomec-nv6.yaml  need to be renamed to socomec-nv6.yaml and copied to resources/definitions/os_detection/
os_discovery_socomec-nv6.yaml  need to be renamed to socomec-nv6.yaml and copied to resources/definitions/os_dicovery/
SOCOMECUPS6-MIB goes into mibs/socomec/
Based on implementation of NET VISION 8 card, with added EMD sensor (temp, humidity).
MIB file slightly edited, to fall in one branch with NV8 and to fix typo error.
No any conflict with existing socomec OS or files.
