<?php

namespace Sunaoka\Aws\Structures\Ecr\StartLifecyclePolicyPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $lifecyclePolicyText
 */
class StartLifecyclePolicyPreviewRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     lifecyclePolicyText?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
