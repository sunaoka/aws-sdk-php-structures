<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $Id
 * @property string|null $Name
 * @property string|null $Owner
 * @property string|null $Description
 * @property string|null $Distributor
 * @property string|null $SupportDescription
 * @property string|null $SupportEmail
 * @property string|null $SupportUrl
 * @property list<Shapes\Tag>|null $AddTags
 * @property list<string>|null $RemoveTags
 * @property Shapes\SourceConnection|null $SourceConnection
 */
class UpdateProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     Id: string,
     *     Name?: string|null,
     *     Owner?: string|null,
     *     Description?: string|null,
     *     Distributor?: string|null,
     *     SupportDescription?: string|null,
     *     SupportEmail?: string|null,
     *     SupportUrl?: string|null,
     *     AddTags?: list<Shapes\Tag>|null,
     *     RemoveTags?: list<string>|null,
     *     SourceConnection?: Shapes\SourceConnection|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
