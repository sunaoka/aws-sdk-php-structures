<?php

namespace Sunaoka\Aws\Structures\EKS\CreateEksAnywhereSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\EksAnywhereSubscriptionTerm $term
 * @property int $licenseQuantity
 * @property 'Cluster' $licenseType
 * @property bool $autoRenew
 * @property string $clientRequestToken
 * @property array<string, string> $tags
 */
class CreateEksAnywhereSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     term: Shapes\EksAnywhereSubscriptionTerm,
     *     licenseQuantity?: int,
     *     licenseType?: 'Cluster',
     *     autoRenew?: bool,
     *     clientRequestToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
