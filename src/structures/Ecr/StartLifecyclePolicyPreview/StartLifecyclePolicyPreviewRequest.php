<?php

namespace Sunaoka\Aws\Structures\Ecr\StartLifecyclePolicyPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property string|null $lifecyclePolicyText
 */
class StartLifecyclePolicyPreviewRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     lifecyclePolicyText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
