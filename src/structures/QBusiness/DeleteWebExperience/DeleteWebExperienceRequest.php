<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteWebExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $webExperienceId
 */
class DeleteWebExperienceRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     webExperienceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
