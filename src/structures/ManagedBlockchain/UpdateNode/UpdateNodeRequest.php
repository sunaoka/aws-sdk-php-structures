<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\UpdateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $MemberId
 * @property string $NodeId
 * @property Shapes\NodeLogPublishingConfiguration $LogPublishingConfiguration
 */
class UpdateNodeRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MemberId?: string,
     *     NodeId: string,
     *     LogPublishingConfiguration?: Shapes\NodeLogPublishingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
