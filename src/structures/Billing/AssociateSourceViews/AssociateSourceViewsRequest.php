<?php

namespace Sunaoka\Aws\Structures\Billing\AssociateSourceViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property list<string> $sourceViews
 */
class AssociateSourceViewsRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     sourceViews: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
