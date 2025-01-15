<?php

namespace Sunaoka\Aws\Structures\kendra\CreateExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IndexId
 * @property string|null $RoleArn
 * @property Shapes\ExperienceConfiguration|null $Configuration
 * @property string|null $Description
 * @property string|null $ClientToken
 */
class CreateExperienceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IndexId: string,
     *     RoleArn?: string|null,
     *     Configuration?: Shapes\ExperienceConfiguration|null,
     *     Description?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
