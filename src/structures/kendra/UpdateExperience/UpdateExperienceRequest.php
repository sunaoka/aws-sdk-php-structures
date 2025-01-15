<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string $IndexId
 * @property string|null $RoleArn
 * @property Shapes\ExperienceConfiguration|null $Configuration
 * @property string|null $Description
 */
class UpdateExperienceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     IndexId: string,
     *     RoleArn?: string|null,
     *     Configuration?: Shapes\ExperienceConfiguration|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
