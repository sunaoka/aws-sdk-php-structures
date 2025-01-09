<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppValidationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property list<Shapes\AppValidationConfiguration> $appValidationConfigurations
 * @property list<Shapes\ServerGroupValidationConfiguration> $serverGroupValidationConfigurations
 */
class PutAppValidationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     appValidationConfigurations?: list<Shapes\AppValidationConfiguration>,
     *     serverGroupValidationConfigurations?: list<Shapes\ServerGroupValidationConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
