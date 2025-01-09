<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Id
 * @property string $Name
 * @property string $Owner
 * @property string $Description
 * @property string $Distributor
 * @property string $SupportDescription
 * @property string $SupportEmail
 * @property string $SupportUrl
 * @property list<Shapes\Tag> $AddTags
 * @property list<string> $RemoveTags
 * @property Shapes\SourceConnection $SourceConnection
 */
class UpdateProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Id: string,
     *     Name?: string,
     *     Owner?: string,
     *     Description?: string,
     *     Distributor?: string,
     *     SupportDescription?: string,
     *     SupportEmail?: string,
     *     SupportUrl?: string,
     *     AddTags?: list<Shapes\Tag>,
     *     RemoveTags?: list<string>,
     *     SourceConnection?: Shapes\SourceConnection
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
