<?php

namespace Sunaoka\Aws\Structures\Textract\CreateAdapter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterName
 * @property string $ClientRequestToken
 * @property string $Description
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 * @property 'ENABLED'|'DISABLED' $AutoUpdate
 * @property array<string, string> $Tags
 */
class CreateAdapterRequest extends Request
{
    /**
     * @param array{
     *     AdapterName: string,
     *     ClientRequestToken?: string,
     *     Description?: string,
     *     FeatureTypes: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>,
     *     AutoUpdate?: 'ENABLED'|'DISABLED',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
