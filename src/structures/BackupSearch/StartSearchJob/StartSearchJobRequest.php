<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $Tags
 * @property string|null $Name
 * @property string|null $EncryptionKeyArn
 * @property string|null $ClientToken
 * @property Shapes\SearchScope $SearchScope
 * @property Shapes\ItemFilters|null $ItemFilters
 */
class StartSearchJobRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>|null,
     *     Name?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     ClientToken?: string|null,
     *     SearchScope: Shapes\SearchScope,
     *     ItemFilters?: Shapes\ItemFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
