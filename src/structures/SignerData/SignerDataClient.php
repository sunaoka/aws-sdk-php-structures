<?php

namespace Sunaoka\Aws\Structures\SignerData;

class SignerDataClient extends \Aws\SignerData\SignerDataClient
{
    use GetRevocationStatus\GetRevocationStatusTrait;
}
