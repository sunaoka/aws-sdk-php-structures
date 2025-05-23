<?php

namespace Sunaoka\Aws\Structures\Redshift\DeregisterNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NamespaceIdentifierUnion $NamespaceIdentifier
 * @property list<string> $ConsumerIdentifiers
 */
class DeregisterNamespaceRequest extends Request
{
    /**
     * @param array{
     *     NamespaceIdentifier: Shapes\NamespaceIdentifierUnion,
     *     ConsumerIdentifiers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
