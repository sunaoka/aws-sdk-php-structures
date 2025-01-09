<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Tags
 * @property string $Name
 * @property string $EncryptionKeyArn
 * @property string $ClientToken
 * @property Shapes\SearchScope $SearchScope
 * @property Shapes\ItemFilters $ItemFilters
 */
class StartSearchJobRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>,
     *     Name?: string,
     *     EncryptionKeyArn?: string,
     *     ClientToken?: string,
     *     SearchScope: Shapes\SearchScope,
     *     ItemFilters?: Shapes\ItemFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
