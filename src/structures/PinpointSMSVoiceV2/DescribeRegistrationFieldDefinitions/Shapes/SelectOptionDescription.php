<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Option
 * @property string|null $Title
 * @property string|null $Description
 */
class SelectOptionDescription extends Shape
{
    /**
     * @param array{
     *     Option: string,
     *     Title?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
