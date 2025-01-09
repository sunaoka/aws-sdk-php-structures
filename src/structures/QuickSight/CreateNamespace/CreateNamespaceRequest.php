<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property 'QUICKSIGHT' $IdentityStore
 * @property list<Shapes\Tag> $Tags
 */
class CreateNamespaceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace: string,
     *     IdentityStore: 'QUICKSIGHT',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
