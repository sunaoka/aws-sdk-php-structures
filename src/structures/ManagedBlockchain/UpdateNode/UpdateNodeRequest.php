<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\UpdateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string|null $MemberId
 * @property string $NodeId
 * @property Shapes\NodeLogPublishingConfiguration|null $LogPublishingConfiguration
 */
class UpdateNodeRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MemberId?: string|null,
     *     NodeId: string,
     *     LogPublishingConfiguration?: Shapes\NodeLogPublishingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
