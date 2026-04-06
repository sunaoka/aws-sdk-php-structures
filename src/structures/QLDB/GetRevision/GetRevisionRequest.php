<?php

namespace Sunaoka\Aws\Structures\QLDB\GetRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\ValueHolder $BlockAddress
 * @property string $DocumentId
 * @property Shapes\ValueHolder|null $DigestTipAddress
 */
class GetRevisionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     BlockAddress: Shapes\ValueHolder,
     *     DocumentId: string,
     *     DigestTipAddress?: Shapes\ValueHolder|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
