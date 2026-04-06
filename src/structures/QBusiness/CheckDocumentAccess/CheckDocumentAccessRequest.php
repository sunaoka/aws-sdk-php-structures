<?php

namespace Sunaoka\Aws\Structures\QBusiness\CheckDocumentAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $userId
 * @property string $documentId
 * @property string|null $dataSourceId
 */
class CheckDocumentAccessRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     userId: string,
     *     documentId: string,
     *     dataSourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
