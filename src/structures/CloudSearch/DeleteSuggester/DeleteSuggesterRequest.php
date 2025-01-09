<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteSuggester;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SuggesterName
 */
class DeleteSuggesterRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SuggesterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
