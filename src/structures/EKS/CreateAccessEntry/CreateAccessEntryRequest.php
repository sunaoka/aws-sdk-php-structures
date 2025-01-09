<?php

namespace Sunaoka\Aws\Structures\EKS\CreateAccessEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $principalArn
 * @property list<string> $kubernetesGroups
 * @property array<string, string> $tags
 * @property string $clientRequestToken
 * @property string $username
 * @property string $type
 */
class CreateAccessEntryRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     principalArn: string,
     *     kubernetesGroups?: list<string>,
     *     tags?: array<string, string>,
     *     clientRequestToken?: string,
     *     username?: string,
     *     type?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
