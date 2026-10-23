<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListAttachmentNatConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 32766>|null $RuleNumber
 * @property string|null $MatchSourceCidr
 * @property string|null $NatCidr
 * @property 'CREATING'|'MODIFYING'|'DELETING'|'ACTIVATED'|'ACTIVATING'|'DEACTIVATED'|'DEACTIVATING'|'FAILED'|'PENDING_ATTACHMENT_ACCEPTANCE'|null $State
 */
class NatRule extends Shape
{
    /**
     * @param array{
     *     RuleNumber?: int<1, 32766>|null,
     *     MatchSourceCidr?: string|null,
     *     NatCidr?: string|null,
     *     State?: 'CREATING'|'MODIFYING'|'DELETING'|'ACTIVATED'|'ACTIVATING'|'DEACTIVATED'|'DEACTIVATING'|'FAILED'|'PENDING_ATTACHMENT_ACCEPTANCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
