<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'launchTemplateIdDoesNotExist'|'launchTemplateIdMalformed'|'launchTemplateNameDoesNotExist'|'launchTemplateNameMalformed'|'launchTemplateVersionDoesNotExist'|'unexpectedError'|null $Code
 * @property string|null $Message
 */
class ResponseError extends Shape
{
    /**
     * @param array{
     *     Code?: 'launchTemplateIdDoesNotExist'|'launchTemplateIdMalformed'|'launchTemplateNameDoesNotExist'|'launchTemplateNameMalformed'|'launchTemplateVersionDoesNotExist'|'unexpectedError'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
