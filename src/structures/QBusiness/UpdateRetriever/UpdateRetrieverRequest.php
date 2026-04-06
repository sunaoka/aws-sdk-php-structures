<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateRetriever;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $retrieverId
 * @property Shapes\RetrieverConfiguration|null $configuration
 * @property string|null $displayName
 * @property string|null $roleArn
 */
class UpdateRetrieverRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     retrieverId: string,
     *     configuration?: Shapes\RetrieverConfiguration|null,
     *     displayName?: string|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
