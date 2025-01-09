<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetCloudFormationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $TemplateId
 */
class GetCloudFormationTemplateRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     TemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
