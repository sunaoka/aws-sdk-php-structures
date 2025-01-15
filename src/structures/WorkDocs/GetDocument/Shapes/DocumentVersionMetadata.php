<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $ContentType
 * @property int|null $Size
 * @property string|null $Signature
 * @property 'INITIALIZED'|'ACTIVE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ModifiedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ContentCreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ContentModifiedTimestamp
 * @property string|null $CreatorId
 * @property array<'SMALL'|'SMALL_HQ'|'LARGE', string>|null $Thumbnail
 * @property array<'ORIGINAL'|'WITH_COMMENTS', string>|null $Source
 */
class DocumentVersionMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     ContentType?: string|null,
     *     Size?: int|null,
     *     Signature?: string|null,
     *     Status?: 'INITIALIZED'|'ACTIVE'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ContentCreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ContentModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CreatorId?: string|null,
     *     Thumbnail?: array<'SMALL'|'SMALL_HQ'|'LARGE', string>|null,
     *     Source?: array<'ORIGINAL'|'WITH_COMMENTS', string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
