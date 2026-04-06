<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\AssociateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerName
 * @property string $NodeName
 * @property list<Shapes\EngineAttribute> $EngineAttributes
 */
class AssociateNodeRequest extends Request
{
    /**
     * @param array{
     *     ServerName: string,
     *     NodeName: string,
     *     EngineAttributes: list<Shapes\EngineAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
