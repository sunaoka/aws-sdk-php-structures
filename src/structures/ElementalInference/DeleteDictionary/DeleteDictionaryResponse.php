<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteDictionary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property 'CREATING'|'AVAILABLE'|'REFERENCED'|'DELETING'|'DELETED' $status
 */
class DeleteDictionaryResponse extends Response
{
}
