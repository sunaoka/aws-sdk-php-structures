<?php

namespace Sunaoka\Aws\Structures\Textract\CreateAdapter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterName
 * @property string|null $ClientRequestToken
 * @property string|null $Description
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 * @property 'ENABLED'|'DISABLED'|null $AutoUpdate
 * @property array<string, string>|null $Tags
 */
class CreateAdapterRequest extends Request
{
    /**
     * @param array{
     *     AdapterName: string,
     *     ClientRequestToken?: string|null,
     *     Description?: string|null,
     *     FeatureTypes: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>,
     *     AutoUpdate?: 'ENABLED'|'DISABLED'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
