<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetDictionary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string $id
 * @property 'eng'|'fra'|'ita'|'deu'|'spa'|'por' $language
 * @property 'CREATING'|'AVAILABLE'|'REFERENCED'|'DELETING'|'DELETED' $status
 * @property list<string>|null $references
 * @property array<string, string>|null $tags
 */
class GetDictionaryResponse extends Response
{
}
