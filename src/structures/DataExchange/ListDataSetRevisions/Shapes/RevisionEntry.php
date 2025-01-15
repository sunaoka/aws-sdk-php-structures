<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataSetRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $Comment
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DataSetId
 * @property bool|null $Finalized
 * @property string $Id
 * @property string|null $SourceId
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string|null $RevocationComment
 * @property bool|null $Revoked
 * @property \Aws\Api\DateTimeResult|null $RevokedAt
 */
class RevisionEntry extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Comment?: string|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     DataSetId: string,
     *     Finalized?: bool|null,
     *     Id: string,
     *     SourceId?: string|null,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     RevocationComment?: string|null,
     *     Revoked?: bool|null,
     *     RevokedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
