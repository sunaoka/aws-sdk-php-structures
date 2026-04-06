<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateEksAnywhereSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $effectiveDate
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property int|null $licenseQuantity
 * @property 'Cluster'|null $licenseType
 * @property EksAnywhereSubscriptionTerm|null $term
 * @property string|null $status
 * @property bool|null $autoRenew
 * @property list<string>|null $licenseArns
 * @property list<License>|null $licenses
 * @property array<string, string>|null $tags
 */
class EksAnywhereSubscription extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     effectiveDate?: \Aws\Api\DateTimeResult|null,
     *     expirationDate?: \Aws\Api\DateTimeResult|null,
     *     licenseQuantity?: int|null,
     *     licenseType?: 'Cluster'|null,
     *     term?: EksAnywhereSubscriptionTerm|null,
     *     status?: string|null,
     *     autoRenew?: bool|null,
     *     licenseArns?: list<string>|null,
     *     licenses?: list<License>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
