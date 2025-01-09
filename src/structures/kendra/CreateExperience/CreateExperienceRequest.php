<?php

namespace Sunaoka\Aws\Structures\kendra\CreateExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IndexId
 * @property string $RoleArn
 * @property Shapes\ExperienceConfiguration $Configuration
 * @property string $Description
 * @property string $ClientToken
 */
class CreateExperienceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IndexId: string,
     *     RoleArn?: string,
     *     Configuration?: Shapes\ExperienceConfiguration,
     *     Description?: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
