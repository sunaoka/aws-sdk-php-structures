<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'launchTemplateIdDoesNotExist'|'launchTemplateIdMalformed'|'launchTemplateNameDoesNotExist'|'launchTemplateNameMalformed'|'launchTemplateVersionDoesNotExist'|'unexpectedError' $Code
 * @property string $Message
 */
class ResponseError extends Shape
{
    /**
     * @param array{
     *     Code?: 'launchTemplateIdDoesNotExist'|'launchTemplateIdMalformed'|'launchTemplateNameDoesNotExist'|'launchTemplateNameMalformed'|'launchTemplateVersionDoesNotExist'|'unexpectedError',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
