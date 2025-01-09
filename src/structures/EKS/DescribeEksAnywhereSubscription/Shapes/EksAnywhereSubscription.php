<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeEksAnywhereSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $effectiveDate
 * @property \Aws\Api\DateTimeResult $expirationDate
 * @property int $licenseQuantity
 * @property 'Cluster' $licenseType
 * @property EksAnywhereSubscriptionTerm $term
 * @property string $status
 * @property bool $autoRenew
 * @property list<string> $licenseArns
 * @property array<string, string> $tags
 */
class EksAnywhereSubscription extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     effectiveDate?: \Aws\Api\DateTimeResult,
     *     expirationDate?: \Aws\Api\DateTimeResult,
     *     licenseQuantity?: int,
     *     licenseType?: 'Cluster',
     *     term?: EksAnywhereSubscriptionTerm,
     *     status?: string,
     *     autoRenew?: bool,
     *     licenseArns?: list<string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
