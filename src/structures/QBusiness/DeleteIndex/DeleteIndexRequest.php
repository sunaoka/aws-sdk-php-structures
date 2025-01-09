<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 */
class DeleteIndexRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
