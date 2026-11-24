<?php

namespace Sunaoka\Aws\Structures\FSx\CreateClusterPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $FileSystemId
 * @property list<string> $PeerAddresses
 * @property string $PassphraseSecretArn
 * @property string|null $PeerClusterName
 * @property 'ALL'|'NONE'|'SPECIFIED' $AllowedSvmMode
 * @property list<string>|null $AllowedSvmIds
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateClusterPeerRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     FileSystemId: string,
     *     PeerAddresses: list<string>,
     *     PassphraseSecretArn: string,
     *     PeerClusterName?: string|null,
     *     AllowedSvmMode: 'ALL'|'NONE'|'SPECIFIED',
     *     AllowedSvmIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
