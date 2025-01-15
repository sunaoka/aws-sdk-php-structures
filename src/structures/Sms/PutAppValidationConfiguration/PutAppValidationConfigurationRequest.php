<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppValidationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property list<Shapes\AppValidationConfiguration>|null $appValidationConfigurations
 * @property list<Shapes\ServerGroupValidationConfiguration>|null $serverGroupValidationConfigurations
 */
class PutAppValidationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     appValidationConfigurations?: list<Shapes\AppValidationConfiguration>|null,
     *     serverGroupValidationConfigurations?: list<Shapes\ServerGroupValidationConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
