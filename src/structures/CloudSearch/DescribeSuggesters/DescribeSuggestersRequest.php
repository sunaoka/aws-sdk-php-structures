<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeSuggesters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string>|null $SuggesterNames
 * @property bool|null $Deployed
 */
class DescribeSuggestersRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SuggesterNames?: list<string>|null,
     *     Deployed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
