<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateAccessEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $principalArn
 * @property list<string> $kubernetesGroups
 * @property string $clientRequestToken
 * @property string $username
 */
class UpdateAccessEntryRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     principalArn: string,
     *     kubernetesGroups?: list<string>,
     *     clientRequestToken?: string,
     *     username?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
