<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property string $IndexId
 * @property string $RoleArn
 * @property Shapes\ExperienceConfiguration $Configuration
 * @property string $Description
 */
class UpdateExperienceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     IndexId: string,
     *     RoleArn?: string,
     *     Configuration?: Shapes\ExperienceConfiguration,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
