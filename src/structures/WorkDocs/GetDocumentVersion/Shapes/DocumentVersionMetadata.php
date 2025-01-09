<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $ContentType
 * @property int $Size
 * @property string $Signature
 * @property 'INITIALIZED'|'ACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $ModifiedTimestamp
 * @property \Aws\Api\DateTimeResult $ContentCreatedTimestamp
 * @property \Aws\Api\DateTimeResult $ContentModifiedTimestamp
 * @property string $CreatorId
 * @property array<'SMALL'|'SMALL_HQ'|'LARGE', string> $Thumbnail
 * @property array<'ORIGINAL'|'WITH_COMMENTS', string> $Source
 */
class DocumentVersionMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     ContentType?: string,
     *     Size?: int,
     *     Signature?: string,
     *     Status?: 'INITIALIZED'|'ACTIVE',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     ContentCreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ContentModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     CreatorId?: string,
     *     Thumbnail?: array<'SMALL'|'SMALL_HQ'|'LARGE', string>,
     *     Source?: array<'ORIGINAL'|'WITH_COMMENTS', string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
