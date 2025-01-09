<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeSuggesters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string> $SuggesterNames
 * @property bool $Deployed
 */
class DescribeSuggestersRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SuggesterNames?: list<string>,
     *     Deployed?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
