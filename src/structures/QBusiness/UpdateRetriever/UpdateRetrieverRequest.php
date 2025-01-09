<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateRetriever;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $retrieverId
 * @property Shapes\RetrieverConfiguration $configuration
 * @property string $displayName
 * @property string $roleArn
 */
class UpdateRetrieverRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     retrieverId: string,
     *     configuration?: Shapes\RetrieverConfiguration,
     *     displayName?: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
