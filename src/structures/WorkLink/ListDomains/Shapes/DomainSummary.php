<?php

namespace Sunaoka\Aws\Structures\WorkLink\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string|null $DisplayName
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property 'PENDING_VALIDATION'|'ASSOCIATING'|'ACTIVE'|'INACTIVE'|'DISASSOCIATING'|'DISASSOCIATED'|'FAILED_TO_ASSOCIATE'|'FAILED_TO_DISASSOCIATE' $DomainStatus
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     DisplayName?: string|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     DomainStatus: 'PENDING_VALIDATION'|'ASSOCIATING'|'ACTIVE'|'INACTIVE'|'DISASSOCIATING'|'DISASSOCIATED'|'FAILED_TO_ASSOCIATE'|'FAILED_TO_DISASSOCIATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
