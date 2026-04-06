<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCOUNT_TIER'|'DEFAULT_PROTECT_CONFIGURATION_ID' $Name
 * @property string $Value
 */
class AccountAttribute extends Shape
{
    /**
     * @param array{
     *     Name: 'ACCOUNT_TIER'|'DEFAULT_PROTECT_CONFIGURATION_ID',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
