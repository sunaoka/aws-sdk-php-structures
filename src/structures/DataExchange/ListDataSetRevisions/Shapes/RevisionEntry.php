<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataSetRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Comment
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DataSetId
 * @property bool $Finalized
 * @property string $Id
 * @property string $SourceId
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $RevocationComment
 * @property bool $Revoked
 * @property \Aws\Api\DateTimeResult $RevokedAt
 */
class RevisionEntry extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Comment?: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     DataSetId: string,
     *     Finalized?: bool,
     *     Id: string,
     *     SourceId?: string,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     RevocationComment?: string,
     *     Revoked?: bool,
     *     RevokedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
