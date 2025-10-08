<?php

namespace Sunaoka\Aws\Structures\EC2InstanceConnect;

class EC2InstanceConnectClient extends \Aws\EC2InstanceConnect\EC2InstanceConnectClient
{
    use SendSSHPublicKey\SendSSHPublicKeyTrait;
    use SendSerialConsoleSSHPublicKey\SendSerialConsoleSSHPublicKeyTrait;
}
