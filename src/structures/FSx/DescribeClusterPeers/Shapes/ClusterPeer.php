<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeClusterPeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property string|null $ClusterPeerId
 * @property string|null $FileSystemId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null $Lifecycle
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property list<Tag>|null $Tags
 * @property list<string>|null $PeerAddresses
 * @property string|null $PeerClusterName
 * @property string|null $PassphraseSecretArn
 * @property 'ALL'|'NONE'|'SPECIFIED'|null $AllowedSvmMode
 * @property list<string>|null $AllowedSvmIds
 * @property string|null $Status
 * @property string|null $UUID
 * @property ClusterPeerAuthenticationStatus|null $AuthenticationStatus
 */
class ClusterPeer extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     ClusterPeerId?: string|null,
     *     FileSystemId?: string|null,
     *     Lifecycle?: 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null,
     *     LifecycleTransitionReason?: LifecycleTransitionReason|null,
     *     Tags?: list<Tag>|null,
     *     PeerAddresses?: list<string>|null,
     *     PeerClusterName?: string|null,
     *     PassphraseSecretArn?: string|null,
     *     AllowedSvmMode?: 'ALL'|'NONE'|'SPECIFIED'|null,
     *     AllowedSvmIds?: list<string>|null,
     *     Status?: string|null,
     *     UUID?: string|null,
     *     AuthenticationStatus?: ClusterPeerAuthenticationStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
