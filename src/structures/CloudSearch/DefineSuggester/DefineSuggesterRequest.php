<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineSuggester;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\Suggester $Suggester
 */
class DefineSuggesterRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Suggester: Shapes\Suggester
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
