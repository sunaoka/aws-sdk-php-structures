<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\EcrConfigurationState|null $ecrConfiguration
 * @property Shapes\Ec2ConfigurationState|null $ec2Configuration
 * @property Shapes\AmiConfigurationState|null $amiConfiguration
 */
class GetConfigurationResponse extends Response
{
}
