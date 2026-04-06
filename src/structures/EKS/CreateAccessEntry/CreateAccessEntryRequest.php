<?php

namespace Sunaoka\Aws\Structures\EKS\CreateAccessEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $principalArn
 * @property list<string>|null $kubernetesGroups
 * @property array<string, string>|null $tags
 * @property string|null $clientRequestToken
 * @property string|null $username
 * @property string|null $type
 */
class CreateAccessEntryRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     principalArn: string,
     *     kubernetesGroups?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     clientRequestToken?: string|null,
     *     username?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
