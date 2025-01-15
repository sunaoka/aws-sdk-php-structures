<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocumentMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $DocumentVersion
 * @property Shapes\DocumentReviews $DocumentReviews
 */
class UpdateDocumentMetadataRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion?: string|null,
     *     DocumentReviews: Shapes\DocumentReviews
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
