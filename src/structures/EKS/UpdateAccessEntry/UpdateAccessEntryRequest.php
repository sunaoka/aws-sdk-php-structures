<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateAccessEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $principalArn
 * @property list<string>|null $kubernetesGroups
 * @property string|null $clientRequestToken
 * @property string|null $username
 */
class UpdateAccessEntryRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     principalArn: string,
     *     kubernetesGroups?: list<string>|null,
     *     clientRequestToken?: string|null,
     *     username?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
