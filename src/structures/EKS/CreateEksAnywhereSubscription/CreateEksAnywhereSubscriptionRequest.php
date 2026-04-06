<?php

namespace Sunaoka\Aws\Structures\EKS\CreateEksAnywhereSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\EksAnywhereSubscriptionTerm $term
 * @property int|null $licenseQuantity
 * @property 'Cluster'|null $licenseType
 * @property bool|null $autoRenew
 * @property string|null $clientRequestToken
 * @property array<string, string>|null $tags
 */
class CreateEksAnywhereSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     term: Shapes\EksAnywhereSubscriptionTerm,
     *     licenseQuantity?: int|null,
     *     licenseType?: 'Cluster'|null,
     *     autoRenew?: bool|null,
     *     clientRequestToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
