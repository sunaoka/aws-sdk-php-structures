<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateXssMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $XssMatchSetId
 * @property string $ChangeToken
 * @property list<Shapes\XssMatchSetUpdate> $Updates
 */
class UpdateXssMatchSetRequest extends Request
{
    /**
     * @param array{
     *     XssMatchSetId: string,
     *     ChangeToken: string,
     *     Updates: list<Shapes\XssMatchSetUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
