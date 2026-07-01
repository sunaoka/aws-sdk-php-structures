<?php

namespace Sunaoka\Aws\Structures\Artifact\ListComplianceInquiryQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $queryIdentifier
 * @property string $query
 * @property string|null $response
 * @property 'HUMAN'|'AI'|null $reviewType
 * @property list<Citation>|null $citations
 * @property 'PROCESSING'|'COMPLETED'|'FAILED' $status
 * @property 'Query processing is complete.'|'Query processing is in-progress.'|'An internal error occurred while processing the query. Try again at a later time.'|'Query is pending human review.'|'Query contains restricted or unsupported content.' $statusMessage
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<ResponseVersion>|null $updatedResponseVersions
 */
class QuerySummary extends Shape
{
    /**
     * @param array{
     *     queryIdentifier: int,
     *     query: string,
     *     response?: string|null,
     *     reviewType?: 'HUMAN'|'AI'|null,
     *     citations?: list<Citation>|null,
     *     status: 'PROCESSING'|'COMPLETED'|'FAILED',
     *     statusMessage: 'Query processing is complete.'|'Query processing is in-progress.'|'An internal error occurred while processing the query. Try again at a later time.'|'Query is pending human review.'|'Query contains restricted or unsupported content.',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedResponseVersions?: list<ResponseVersion>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
