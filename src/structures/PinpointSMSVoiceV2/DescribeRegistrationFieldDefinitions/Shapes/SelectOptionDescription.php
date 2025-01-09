<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Option
 * @property string $Title
 * @property string $Description
 */
class SelectOptionDescription extends Shape
{
    /**
     * @param array{
     *     Option: string,
     *     Title?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
